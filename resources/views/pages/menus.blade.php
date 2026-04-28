@extends('layouts.main')

@section('pageContent')
<section class="Menus-section" id="menu">
    <div class="container">
        <div class="row g-5" style="margin-top:100px">

            @php
            $colors = ['cyan', 'teal', 'red', 'indigo', 'pink', 'cyan'];
            @endphp

            @forelse($featuredMenus as $menu)
            <div class="col-lg-6">
                <div class="menus-item {{ $colors[$loop->index % count($colors)] }}">

                    <img src="{{ asset($menu->image) }}" class="img-fluid mx-3" width="150">

                    <div>
                        <h3>
                            {{ $menu->name }}
                            <span style="float:right;color:#ff7b00;">
                                Rs.{{ number_format($menu->price, 2) }}
                            </span>
                        </h3>
                        <p>{{ $menu->description }}</p>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No menu items available.</p>
            </div>
            @endforelse

        </div>
    </div>
</section>

<section class="menu-section mt-5 opacity-20">
    <div class="container">

        <div class="row">
            @forelse($groupedMenus as $category => $items)
            <div class="col-lg-6 mb-5">
                <h3 class="mb-4">{{ $category }}</h3>
                <hr>

                @foreach($items as $menu)
                <div class="menu-item">
                    <h5>{{ $menu->name }}</h5>
                    <span>Rs.{{ number_format($menu->price, 2) }}</span>
                </div>
                @endforeach
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No menu items available.</p>
            </div>
            @endforelse
        </div>

    </div>
</section>
@endsection


@push('styles')
<style>
/*====start menu section=======*/

.menu-section {
    position: relative;
    padding: 60px 0;
    background-image: url('{{ asset('build/assets/img/food-bg.jpg') }}');
    background-size: cover;
    background-position: center;
    z-index: 1;
}

/* Overlay */
.menu-section::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.6);
    z-index: -1;
}

.menu-section h2 {
    color: var(--background-color);

}

.menu-section p {
    color: var(--background-color);

}

.menu-section h3 {
    font-weight: bolder;
    color: var(--contrast-color);
    background-color: #ff7b00;
    border-radius: 10px;
    text-align: center;
}

.menu-heading {
    text-align: center;
    margin-bottom: 5px;
    font-family: 'Nunito', sans-serif;
    font-size: 36px;
    color: #f8efea;
}

.menu-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    border-bottom: 1px solid #e9ecef;

}

.menu-item h5 {
    margin: 0;
    font-size: 20px;
    font-family: 'Nunito', sans-serif;
    color: #ffffff;
}

.menu-item span {
    font-size: 18px;
    font-family: 'Roboto', sans-serif;
    color: #ffffff;
}

/* ------service start------- */

.Menus-section .menus-item {
    background-color: var(--surface-color);
    border: 1px solid color-mix(in srgb, var(--default-color), transparent 85%);
    height: 100%;
    padding: 30px;
    transition: 0.3s;
    border-radius: 10px;
    display: flex;

}

.Menus-section .menus-item.icon1 {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 72px;
    height: 72px;
    flex-shrink: 0;
    font-size: 32px;
    border-radius: 10px;
    position: relative;
    margin-right: 25px;

}

.Menus-section .menus-item h3 {
    font-size: 22px;
    transition: 0.3s;
    color: color-mix(in srgb, var(--heading-color), transparent 25%);
    font-weight: 700;

}

.Menus-section .menus-item p {
    margin-bottom: 0;
    color: color-mix(in srgb, var(--default-color), transparent 40%);
    transition: 0.3s;
}

.Menus-section .menus-item a.read-more {
    margin-top: 10px;
    transition: 0.3s;
    font-size: 14px;
    display: inline-flex;
    align-items: center;
    color: #ff7b00;
    text-decoration: none;
}

.Menus-section .menus-item .read-more i {
    margin-left: 10px;

}

.Menus-section .menus-item.cyan .icon1 {
    color: #0dcaf0;
    border: 1px solid #0dcaf0;
    background: rgba(13, 202, 240, 0.1);
}

.Menus-section .menus-item.orange .icon1 {
    color: #fd7e14;
    border: 1px solid #fd7e14;
    background: rgba(253, 126, 20, 0.1);
}

.Menus-section .menus-item.teal .icon1 {
    color: #20c997;
    border: 1px solid #20c997;
    background: rgba(32, 201, 151, 0.1);
}

.Menus-section .menus-item.red .icon1 {
    color: #df1529;
    border: 1px solid #df1529;
    background: rgba(223, 21, 4, 0.1);
}

.Menus-section .menus-item.indigo .icon1 {
    color: #6610f2;
    border: 1px solid #6610f2;
    background: rgba(102, 16, 242, 0.1);
}

.Menus-section .menus-item.pink .icon1 {
    color: #f3268c;
    border: 1px solid #f3268c;
    background: rgba(243, 38, 140, 0.1);
}

.Menus-section .menus-item:hover {
    box-shadow: 0px 2px 25px rgba(0, 0, 0, 0.1);
}

.Menus-section .menus-item:hover h3 {
    color: var(--heading-color);
}

.Menus-section .menus-item:hover p {
    color: color-mix(in srgb, var(--default-color), transparent 10%);
}

@media (max-width: 576px) {
    .Menus-section .menus-item img {
        width: 75px;
        height: 50px;
        max-width: 100%;
        margin-bottom: 10px;
    }

    .Menus-section .menus-item {
        padding: 15px;
    }

    .Menus-section .menus-item h3 {
        font-size: 16px;
    }

    .Menus-section .menus-item p {
        font-size: 12px;
    }

    .Menus-section .menus-item a.read-more {
        font-size: 10px;
    }
}

.menus h3 {
    color: var(--heading-color);

}

.menus p {
    color: var(--heading-color);
    text-align: left;
    font-style: normal;

}

.menus .row .icon-box i {
    color: var(--assent-color);
    font-size: 20px;

}

.menus h4 {
    font-size: 1.1rem;
    color: var(--default-color);

}

.box-1 {
    font-size: 0.9rem;
}
</style>
@endpush
