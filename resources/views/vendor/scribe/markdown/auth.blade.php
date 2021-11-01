@if(!$isAuthed)

@else
# Authenticating requests

{!! $authDescription !!}

{!! $extraAuthInfo !!}
@endif
