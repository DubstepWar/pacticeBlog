<style>
    .pagination {
        list-style: none;
        margin: 10px 10px 20px 5px;

    }
    .pagination  ul {
        text-align: center;
        margin-bottom: 0px!important;
    }
    .pagination   ul li {
        display: inline-block;
        margin-top: 0px;
        font-family: Verdana, Arial, Helvetica, sans-serif;

    }
    .pagination   ul li a {
        display: block;
        padding: 10px 15px;
        background: #fafafa;
        color: #333333;
        text-decoration: none;
        position: relative;
    }
    .pagination ul li.active a {
        color: #2d4c80; font-size: 16px; font-weight: bold;
    }
    .pagination .next{
        text-align: right;
    }
</style>
@if ($paginator->hasPages())
    <div class="pagination ">
        <nav >
            @if ($paginator->onFirstPage())
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" >Назад</a>
            @endif

            @if ($paginator->hasMorePages())
                <a  class="next" href="{{ $paginator->nextPageUrl() }}" rel="next">Следующая</a>
            @else
                <a class="next" disabled>Следующая</a>
            @endif

            <ul >

                @foreach ($elements as $element)

                    @if (is_string($element))
                        <li><span><span>{{ $element }}</span></span></li>
                    @endif


                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active"><a >{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}" >{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
@endif