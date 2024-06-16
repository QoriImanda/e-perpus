@extends('template.homePage.app')

@section('content')
    <nav class="navbar-2">
        <div class="logo">
        </div>
        <div class="search-box">
            <form action="{{ route('home.bukuPage') }}" method="get">
                @csrf
                <div class="search-field">

                    <input type="text" name="search" value="{{request('search')}}" placeholder="Search over 30 million Book titles" />
                    <button type="submit" class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>

        </div>
        <div class="nav-end">
        </div>
    </nav>
    <div class="breadcrumb-container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="#">Books</a></li>
        </ul>
    </div>
    <section class="filter">
        <div class="book-grid-container">
            <div class="book-collections">
                <h4>Books</h4>
                <div class="category">
                    <div class="category-list">
                        {{-- <button>Today</button>
                        <button>This Week</button>
                        <button>This Month</button> --}}
                    </div>
                </div>
                <div class="books">
                    @foreach ($books as $item)
                        <div class="book-card">
                            <div class="img">
                                <a href="{{route('home.detailBuku', $item->id)}}"><img src="{{ asset('Image/Buku/' . $item->gambar) }}"
                                        alt="" /></a>
                                {{-- <button class="like" id="likebtn">
                                    <i class="fa-regular fa-heart"></i>
                                </button> --}}
                            </div>
                            <h5>{{ $item->judul }}</h5>
                            <small>
                                <a href="">{{ $item->Kategori->kategori }}</a>
                                {{-- <a href="">Thriller,</a>
                                <a href="">Drama</a> --}}
                            </small>
                            {{-- <div class="star-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div> --}}
                        </div>
                    @endforeach
                </div>
                <div class="footer">
                    <div class="data-shown">
                        <p>Showing {{ $books->firstItem() }} to {{ $books->lastItem() }} from {{ $books->total() }} pages
                        </p>
                    </div>
                    <div class="pagination">
                        @if (!$books->onFirstPage())
                            <button onclick="window.location.href='{{ $books->previousPageUrl() }}'"><i
                                    class="fa fa-chevron-left"></i>Previous</button>
                        @endif
                        {{-- @dd($books->previousPageUrl()) --}}
                        <div class="number">
                            <div class="number">
                                @php
                                    $currentPage = $books->currentPage();
                                    $startPage = max(1, $currentPage - 4);
                                    $endPage = min($currentPage + 4, $books->lastPage());
                                @endphp

                                @for ($i = $startPage; $i <= $endPage; $i++)
                                    @if ($books->currentPage() == $i)
                                        <a style="background-color: rgb(108, 96, 197); color:white"
                                            href="{{ $books->url($i) }}">{{ $i }}</a>
                                    @else
                                        <a href="{{ $books->url($i) }}">{{ $i }}</a>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        @if ($books->hasMorePages())
                            <button onclick="window.location.href='{{ $books->nextPageUrl() }}'">Next<i
                                    class="fa fa-chevron-right"></i></button>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="book-sale">
        <div class="heading">
            <h4>Books On Sale</h4>
            <div class="arrowbtn">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
        <div class="book-container">
            <div class="wrapper">
                <ul class="carousel">
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-1.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>The Giver</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-2.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>The Wright ...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-9.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>The Ruins Of...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-10.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>Percy Jackson</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-5.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>To kill a...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-6.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>Horry Potter</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <a href="book-detail.html"><img src="../images/book-7.jpg" alt="" /></a>
                            <span class="badge">50%</span>
                        </div>
                        <h5>Heroes of ...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section> --}}

    <section class="subscription">
        <div class="container">
            {{-- <h4>
                Subscribe our newsletter for Latest <br />
                books updates
            </h4>
            <div class="input">
                <input type="text" placeholder="Type your email here" />
                <button>subscribe</button>
            </div> --}}
        </div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
    </section>
@endsection
