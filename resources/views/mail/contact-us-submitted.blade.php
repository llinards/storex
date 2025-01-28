<x-mail::message>
<img src="{{ asset('images/storex-logo.png') }}" alt="Storex Logo" style="max-width: 100px; margin-bottom: 20px;"/>

# Saņemts jauns ziņojums no kontaktformas.

**E-pasts:** {{ $data['email'] }}<br/>
**Telefona numurs:** {{ $data['phone'] }}<br/>
**Vārds, Uzvārds:** {{ $data['fullname'] }}<br/>
@if($data['company'])
**Uzņēmums:** {{ $data['company'] }}<br/>
@endif
@if($data['message'])
**Ziņa:** {{ $data['message'] }}<br/>
@endif
@if($data['agrees-for-data-processing'])
**Klients ir devis piekrišanu datu apstrādei:** Jā<br/>
@endif

**Laiks:** {{ now()->format('H:i') }}<br/>
**Datums:** {{ now()->format('d.m.Y') }}<br/>

Paldies,<br>
{{ config('app.name') }}
</x-mail::message>
