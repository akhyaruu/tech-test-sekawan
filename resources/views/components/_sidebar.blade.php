@if (Auth::user()->role_id == 1)
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin') }}" aria-expanded="false"><i
            class="fas fa-chart-bar" aria-hidden="true"></i>
        <span class="hide-menu">Dashboard</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index.pemesanan') }}"
        aria-expanded="false"><i class="fas fa-car" aria-hidden="true"></i>
        <span class="hide-menu">Pemesanan</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index.ongoing') }}"
        aria-expanded="false"><i class="fas fa-spinner" aria-hidden="true"></i>
        <span class="hide-menu">On Going</span>
    </a>
</li>
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('index.history') }}"
        aria-expanded="false"><i class="fas fa-history" aria-hidden="true"></i>
        <span class="hide-menu">History</span>
    </a>
</li>
@else
<li class="sidebar-item">
    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('user') }}" aria-expanded="false"><i
            class="fas fa-sticky-note" aria-hidden="true"></i>
        <span class="hide-menu">Persetujuan</span>
    </a>
</li>
@endif
