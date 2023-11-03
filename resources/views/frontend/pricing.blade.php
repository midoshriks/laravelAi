<div class="container">
    <div class="row">

        @foreach ($cards as $card)
            <div class="col-lg-8 offset-lg-2">
                <div class="section-heading">
                    <h4>{{ $card->title }}
                        <em>{{ $card->title_em }}</em> {{ $card->title_h4 }}
                    </h4>
                    <img src="{{ asset($card->title_avatar) }}" alt="">
                    <p>{{ $card->title_p }}.</p>
                </div>
            </div>
        @endforeach



        @foreach ($pricing as $pric)
            <div class="col-lg-4">
                <div class="{{ $pric->id == 2 ? 'pricing-item-pro' : 'pricing-item-regular' }}">
                    <span class="price">${{ $pric->body_spin }}</span>
                    <h4>{{ $pric->body_h4 }}</h4>
                    <div class="icon">
                        <img src="{{ asset($pric->body_icon) }}" alt="">
                    </div>
                    <ul>
                        <li>{{ $pric->body_li_1 }}</li>
                        <li>{{ $pric->body_li_2 }}</li>
                        <li>{{ $pric->body_li_3 }}</li>
                        <li>{{ $pric->body_li_4 }}</li>
                        <li>{{ $pric->body_li_5 }}</li>
                        <li class="non-function">{{ $pric->body_li_6 }}</li>
                    </ul>
                    <div class="border-button">
                        <a href="#">{{ $pric->button }}</a>
                    </div>
                </div>
            </div>
        @endforeach



    </div>
</div>
