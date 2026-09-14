<x-mail::message>
# Thanks, {{ $contactMessage->full_name }}!

We've received your message and a GST practitioner will get back to you within one business day.

<x-mail::table>
| Field | Value |
| :---- | :---- |
| Name | {{ $contactMessage->full_name }} |
| Phone | {{ $contactMessage->phone }} |
| Email | {{ $contactMessage->email }} |
| Interested In | {{ $contactMessage->subject }} |
</x-mail::table>

**Your message:**

{{ $contactMessage->message }}

If anything above needs correcting, just reply to this email or call us at +91 93763 77778.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
