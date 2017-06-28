@if (Auth::guard('web')->check())
<p>
    Prijavljeni ste kao <strong>KORISNIK</strong>
</p>
@else
    <p>
    Odjavljeni ste kao <strong>KORISNIK</strong>
    </p>
@endif

@if (Auth::guard('admin')->check())
<p>
    Prijavljeni ste kao <strong>ADMINISTRATOR</strong>
</p>
@else
    <p>
    Odjavljeni ste kao <strong>ADMINISTRATOR</strong>
    </p>
@endif
