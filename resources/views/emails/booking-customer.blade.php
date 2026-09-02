<x-mail::message>
# Booking Requested, {{ $booking->full_name }}!

We've noted your request for **{{ $booking->preferred_date->format('d M Y') }} at {{ $booking->preferred_time }}**. A practitioner will confirm your slot by email within one business day.

<x-mail::table>
| Field | Value |
| :---- | :---- |
| Name | {{ $booking->full_name }} |
| Business | {{ $booking->business_name ?: '—' }} |
| Email | {{ $booking->email }} |
| Mobile | {{ $booking->mobile }} |
| Service Required | {{ $booking->service_required }} |
| Preferred Date | {{ $booking->preferred_date->format('d M Y') }} |
| Preferred Time | {{ $booking->preferred_time }} |
</x-mail::table>

If you need to change your slot, just reply to this email or call us at +91 93763 77778.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
