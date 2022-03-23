<div class="container pt-5">
    <div class="row">
        <div class="col-4">
            @component('components.card.card',
                [
                    'image'         => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/2018_Audi_A7_S_Line_40_TDi_S-A_2.0.jpg/1200px-2018_Audi_A7_S_Line_40_TDi_S-A_2.0.jpg',
                    'title'         => 'Title 1',
                    'description'   => 'Description 1'

                ]
            )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                    'image'         => 'https://cdn.motor1.com/images/mgl/q99AG/s1/audi-a3-limousine-2020.jpg',
                    'title'         => 'Title 2',
                    'description'   => 'Description 2'

                ]
            )
            @endcomponent
        </div>
        <div class="col-4">
            @component('components.card.card',
                [
                    'image'         => 'https://www.razaoautomovel.com/wp-content/uploads/2020/10/Audi-Q8-TFSI-e-1_925x520_acf_cropped.jpg',
                    'title'         => 'Title 3',
                    'description'   => 'Description 3'

                ]
            )
            @endcomponent
        </div>
    </div>
</div>
