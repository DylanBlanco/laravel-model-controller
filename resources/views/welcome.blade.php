@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<main>
    <div>
        <div class="row">
            @foreach ($movies as $item)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4>
                                {{ $item->title }}
                            </h4>
                        
                            <p>
                                Titolo originale: 
                                <h5>
                                    {{ $item->original_title }}
                                </h5>
                            </p>

                            <p>
                                nazione di origine:
                                <b>
                                    {{ $item->nationality }}
                                </b>
                            </p>

                            <p>
                                data uscita:
                                {{ $item->date }}
                            </p>

                            <p>
                                voto:
                                {{ $item->vote }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
