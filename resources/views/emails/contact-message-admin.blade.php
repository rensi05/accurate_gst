<x-mail::message>
# New Contact Message

A new message was submitted through the Contact Us page.

<x-mail::table>
| Field | Value |
| :---- | :---- |
| Name | {{ $contactMessage->full_name }} |
| Phone | {{ $contactMessage->phone }} |
| Email | {{ $contactMessage->email }} |
| Interested In | {{ $contactMessage->subject }} |
| Submitted | {{ $contactMessage->created_at->format('d M Y, h:i A') }} |
</x-mail::table>

**Message:**

{{ $contactMessage->message }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
