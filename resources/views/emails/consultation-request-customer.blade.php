<x-mail::message>
# Thanks, {{ $consultationRequest->full_name }}!

We've received your request for a free consultation on **{{ $consultationRequest->service_required }}**. A GST practitioner will reach out to you within 2–4 business hours.

<x-mail::table>
| Field | Value |
| :---- | :---- |
| Name | {{ $consultationRequest->full_name }} |
| Business | {{ $consultationRequest->business_name ?: '—' }} |
| Email | {{ $consultationRequest->email }} |
| Mobile | {{ $consultationRequest->mobile }} |
| Service Required | {{ $consultationRequest->service_required }} |
</x-mail::table>

If anything above needs correcting, just reply to this email or call us at +91 93763 77778.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
