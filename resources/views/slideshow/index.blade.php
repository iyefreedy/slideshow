<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slideshow Wisudawan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="relative w-screen h-screen bg-wisuda-29 bg-cover bg-no-repeat flex justify-center items-center ">
        @foreach ($graduates as $graduate)
            <div
                class="absolute py-4 px-6 mt-12 transition-opacity duration-700 flex flex-col {{ $loop->index == 0 ? 'current' : '' }} slide">
                <div class="flex flex-row mb-4">
                    <div class="h-96 w-72 border-4 border-yellow-400 rounded-md mr-8 ">
                        <img src="{{ asset('storage/images/29/' . $graduate->nim . '.jpg') }}"
                            alt="{{ $graduate->nim }}" class="h-full w-full object-cover object-center" loading="lazy">
                    </div>

                    <div
                        class="flex min-w-[48rem] max-w-lg flex-col justify-center py-2 px-4 bg-white border-4 border-yellow-400 rounded-md ">
                        <div class="font-bold text-3xl">{{ $graduate->nama }}</div>
                        <div class="font-medium text-xl mb-2">{{ $graduate->nim }}</div>
                        <div class="font-medium mb-2 text-xl">
                            {{ $graduate->department->id != 36 ? 'Judul Skripsi : ' . mb_convert_encoding($graduate->judulSkripsi, 'UTF-8') : 'Judul Tesis : ' . html_entity_decode(htmlentities($graduate->judulSkripsi)) }}
                        </div>
                        <ul class="list-disc list-outside px-4">
                            {{-- @if (!empty($graduate->bidangKerja) && !empty($graduate->tempatKerja))
                                <li class="font-bold text-xl">
                                    {{ ucwords($graduate->bidangKerja . ', ' . $graduate->tempatKerja) }}
                                </li>
                            @elseif(empty($graduate->bidangKerja && empty($graduate->tempatKerja)))

                            @elseif(empty($graduate->tempatKerja) && !empty($graduate->bidangKerja))
                                <li class="font-bold text-xl">
                                    {{ ucwords($graduate->bidangKerja) }}
                                </li>
                            @elseif(!empty($graduate->tempatKerja) && empty($graduate->bidangKerja))
                                <li class="font-bold text-xl">
                                    {{ ucwords($graduate->bidangKerja) }}
                                </li>
                            @endif --}}
                            @foreach ($graduate->passStatements as $statement)
                                <li class="font-bold text-xl
                                ">
                                    {{ $statement->description }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="py-6 text-center font-bold text-3xl bg-white rounded-md border-4 border-yellow-400">
                    <div>{{ __('Program Studi ') . $graduate->department->name }}</div>
                    <div>{{ $graduate->department->faculty->name }}</div>
                    <div>{{ $graduate->department->title }}</div>
                </div>
            </div>
        @endforeach

    </div>

</body>

</html>
