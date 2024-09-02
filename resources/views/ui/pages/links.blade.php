@extends('ui.app')
@section('content')
    <div class="map" id="contact">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3998277803234!2d106.81036747349587!3d-6.210880793776975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6a13e8cd5df%3A0xf115b6d7f5fd2696!2sPusat%20Pelatihan%20Kerja%20Daerah%20Jakarta%20Pusat%20(Bendungan%20Hilir)!5e0!3m2!1sid!2sid!4v1725116764927!5m2!1sid!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">

                @foreach ($links as $item)
                    @php
                        $icon = '';
                        if (strpos($item->links, 'youtube.com') !== false) {
                            $icon = 'bi bi-youtube';
                        } elseif (strpos($item->links, 'instagram.com') !== false) {
                            $icon = 'bi bi-instagram';
                        } elseif (strpos($item->links, 'github.com') !== false) {
                            $icon = 'bi bi-github';
                        } elseif (strpos($item->links, 'facebook.com') !== false) {
                            $icon = 'bi bi-facebook';
                        } else {
                            $icon = 'bi bi-link';
                        }
                    @endphp

                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="{{ $item->links }}"><i
                                class="{{ $icon }}"></i></a>
                    </li>
                @endforeach
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; daniel oktafianus PPKD_JP</p>
        </div>
    </footer>
@endsection
