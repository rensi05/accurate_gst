<x-mail::message>
# New Consultation Booking

A new booking request was submitted on the website.

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
| Notes | {{ $booking->notes ?: '—' }} |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
