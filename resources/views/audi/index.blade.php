@extends('master.main')

@section('content')

    @component('components.Carousel.Carousel',
        ['carouselImages' => $carouselImages])
    @endcomponent

    @component('components.cards.cards')
    @endcomponent

    @component('components.grid.grid', ['position'=>1])
    @endcomponent

    @component('components.grid.grid', ['position'=>2])
    @endcomponent

@endsection

