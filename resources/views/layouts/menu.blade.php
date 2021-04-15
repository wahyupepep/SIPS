<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
{{-- <li class="nav-item">
    <a href="{{ route('letter') }}" class="nav-link">
        <i class="nav-icon fas fa-envelope-open-text"></i>
        <p>Surat Masuk</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('out') }}" class="nav-link">
        <i class="nav-icon fas fa-envelope"></i>
        <p>Surat Keluar</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            Surat
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview" style="display: none;">
        <li class="nav-item">
            <a href="{{ route('letter') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Masuk</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('out') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Surat Keluar</p>
            </a>
        </li>
    </ul>
</li>
{{-- <li class="nav-item">
    <a href="{{ route('mediator') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Mediator</p>
    </a>
</li> --}}
