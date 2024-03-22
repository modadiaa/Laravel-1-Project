@foreach ($children as $subcategory)
    <div class="desc {{ $rs->direction==='right' ? 'text-md-right' : 'text-md-left' }} ">
        @if (count($subcategory->children))

        <div class="top">
            <span class="subheading "> {{ $subcategory->title }}</span>
            <h2 class="mb-4 "><a href=""> {{ $subcategory->subtitle }} </a></h2>

        </div>
        <div class="absolute ">
            <p>{!! $subcategory->content !!}
            </p>
            <p><a href="{{ route('category', ['id' => $subcategory->id, 'slug' => $subcategory->title]) }}" class="custom-btn">المزيد</a></p>
            @include('home.categorytree', ['children' => $subcategory->children])


        </div>
        @else
        <div class="absolute ">

            <p><a href="{{ route('categoryproducts', ['id' => $subcategory->id, 'slug' => $subcategory->title]) }}" class="custom-btn">المزيد</a></p>
        </div>
    </div>
    @endif
@endforeach





