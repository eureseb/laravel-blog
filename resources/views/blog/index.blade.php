@extends('layouts.app')

@section('content')

<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2017/10/10/21/47/laptop-2838921_960_720.jpg"alt="Laptop">
    </div>
    <div>
        <h2 class="clas="text-gray-700 font-bold text-5xl pb-4"">
            Learn to write Laravel Code
        </h2>
        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">Eurese Bustamante</span>, 1 day ago.
        </span>

        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend consectetur risus. Duis placerat sit amet leo sed volutpat. Donec mollis odio sed urna porta, eget fringilla nisi cursus. Sed sit amet libero libero. Integer condimentum odio sit amet eros aliquam molestie. Ut tortor tellus, accumsan ut elit nec, dignissim cursus sapien. Donec quis erat eget nulla ultrices suscipit. Phasellus ac neque sed augue ullamcorper mollis nec vel lacus. Nam fermentum quam at ligula ornare, vitae malesuada erat accumsan. Phasellus ullamcorper ac metus non fringilla. Maecenas felis mi, tempor quis varius pulvinar, varius sit amet magna. Duis in turpis porttitor, luctus enim in, blandit diam.
        </p>

        <a href="" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
            Keep Reading
        </a>
    </div>

</div>

@endsection
