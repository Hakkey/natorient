@component('mail::message')
# Hello from Me

Welcome to the mailing system {{ $data['company_name'] }}

<table border="1">
    <tr>
        <td>
            asdasdad
        </td>
    </tr>
</table>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
