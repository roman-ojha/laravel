<div>
    <h3>Card Title {{ $title }}</h3>
    <h3>Card Subtitle {{ $subTitle }}</h3>
    <h3>Card {{ $description }}</h3>

    {{-- Calling component method --}}
    {{ $addNumber(10, 30) }}

    {{-- getting component attribute --}}
    <h1>{{ $attributes }}</h1>
    {{-- but we will use it as element attrubute --}}
    <h1 {{ $attributes }}>{{ $attributes }}</h1>

    {{-- merge class attribute --}}
    <h1 {{ $attributes->merge(['class' => 'dclass']) }}>{{ $attributes }}</h1>
    {{-- Output:  <h1 class="dclass myclass">class="myclass"</h1> --}}
</div>
