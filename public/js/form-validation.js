$(function () {
    function fieldLabel($field) {
        var explicit = $field.data('label');
        if (explicit) return explicit;
        var $label = $field.closest('div').find('label').first();
        if ($label.length) return $label.text().trim();
        var placeholder = $field.attr('placeholder');
        if (placeholder) return placeholder;
        return 'This field';
    }

    function showError($field, message) {
        $field.addClass('border-error');
        var $error = $field.nextAll('.field-error').first();
        if ($error.length === 0) {
            $error = $('<p class="field-error text-error text-sm mt-1"></p>');
            $field.after($error);
        }
        $error.text(message);
    }

    function clearError($field) {
        $field.removeClass('border-error');
        $field.nextAll('.field-error').first().remove();
    }

    function isValidEmail(value) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    function isValidPhone(value) {
        return /^[0-9+\-\s()]{7,20}$/.test(value);
    }

    function validateField($field) {
        var value = $.trim($field.val());
        var type = ($field.attr('type') || '').toLowerCase();
        var required = $field.prop('required');

        if (required && value === '') {
            showError($field, fieldLabel($field) + ' is required.');
            return false;
        }

        if (value !== '' && type === 'email' && !isValidEmail(value)) {
            showError($field, 'Enter a valid email address.');
            return false;
        }

        if (value !== '' && type === 'tel' && !isValidPhone(value)) {
            showError($field, 'Enter a valid phone number.');
            return false;
        }

        if (required && type === 'date' && value !== '') {
            var min = $field.attr('min');
            if (min && value < min) {
                showError($field, 'Please choose a date from today onward.');
                return false;
            }
        }

        clearError($field);
        return true;
    }

    $('form').each(function () {
        var $form = $(this);
        $form.attr('novalidate', 'novalidate');

        var $fields = $form.find('input, select, textarea').not('[type="hidden"], [type="submit"]');

        $fields.on('input change blur', function () {
            validateField($(this));
        });

        $form.on('submit', function (e) {
            e.preventDefault();

            var isValid = true;
            var $firstInvalid = null;

            $fields.each(function () {
                var $field = $(this);
                if (!validateField($field)) {
                    isValid = false;
                    if (!$firstInvalid) $firstInvalid = $field;
                }
            });

            if (!isValid) {
                if ($firstInvalid) {
                    $('html, body').animate({ scrollTop: $firstInvalid.offset().top - 120 }, 300);
                    $firstInvalid.trigger('focus');
                }
                return;
            }

            if ($form.data('client-only')) {
                var successTarget = $form.data('success-target');
                var fieldsTarget = $form.data('fields-target');
                if (fieldsTarget) $(fieldsTarget).addClass('hidden');
                if (successTarget) $(successTarget).removeClass('hidden');
                if ($form.data('reset-on-success')) {
                    $form[0].reset();
                }
                return;
            }

            if ($form.attr('action')) {
                $form[0].submit();
            }
        });
    });
});
