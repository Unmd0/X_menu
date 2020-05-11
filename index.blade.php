<div class="container">
    <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
            <nav class="header__menu">
                @include('Address.to.xmenu')
                @php
                 xmenu(0,'Category Table','Column of Category name','Column of Category id');   
                @endphp 
            </nav>
        </div>
        <div class="col-lg-3">
    </div>
</div>