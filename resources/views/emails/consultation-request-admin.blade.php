<x-mail::message>
# New Consultation Request

A new consultation request was submitted on the website.

<x-mail::table>
| Field | Value |
| :---- | :---- |
| Name | {{ $consultationRequest->full_name }} |
| Business | {{ $consultationRequest->business_name ?: '—' }} |
| Email | {{ $consultationRequest->email }} |
| Mobile | {{ $consultationRequest->mobile }} |
| Service Required | {{ $consultationRequest->service_required }} |
| Submitted | {{ $consultationRequest->created_at->format('d M Y, h:i A') }} |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
