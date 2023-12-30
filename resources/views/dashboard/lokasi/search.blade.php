
    [
        @foreach ($provinsi as $prov)
        {
            "id": {{ $prov->id }},
            "nama": "{{ $prov->nama }}"
        }
        @if (!$loop->last)
            ,
        @endif
        @endforeach
    ]

