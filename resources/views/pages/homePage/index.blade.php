@extends('template.homePage.app')

@section('content')
    <section class="hero">
        <div class="main">
            <div class="content">
                <small>Perpustakaan Digital</small>
                <h2>SMA NEGERI 1 BANGKINANG SEBERANG</h2>
                <h5>for our student community</h5>
                {{-- <p>
                    Sistem Informasi Perpustakaan Mempermudah Dalam Pencarian Buku
                </p> --}}
                {{-- <div class="btns">
                    <button>Get The Deal<i class="fa-solid fa-arrow-right"></i></button>
                    <button>See other Promos</button>
                </div> --}}
            </div>
            <div class="img">
                <img src="{{ asset('best-ebook-website/images/logo-book.png') }}" alt="" />
            </div>
        </div>
        <div class="square-dot">
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
            <i class="fa-solid fa-square"></i>
        </div>
        <div class="orange-circle"></div>
        <div class="blue-circle"></div>
    </section>

    {{-- <section class="service">
        <div class="service-container">
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-bolt-lightning"></i>
                </div>
                <div class="service-content">
                    <h5>Quick Delivery</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <div class="service-content">
                    <h5>Secure Payment</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <div class="service-content">
                    <h5>Best Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="service-content">
                    <h5>Return Guarantee</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="suggestion">
        <div class="container">
            <div class="recommend">
                <h4>Recommended For You</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                    exercitationem.Lorem ipsum dolor sit amet.
                </p>
                <div class="book-container">
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-1.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-2.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-3.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-4.jpg" alt="" /></a>
                        </figure>
                    </div>
                </div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="square-dot">
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                </div>
            </div>
            <div class="popular">
                <h4>Popular in 2020</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                    exercitationem.
                </p>
                <div class="book-container">
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-5.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-6.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-7.jpg" alt="" /></a>
                        </figure>
                    </div>
                    <div class="book">
                        <figure>
                            <a href="Pages/book-detail.html"><img src="images/book-8.jpg" alt="" /></a>
                        </figure>
                    </div>
                </div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div class="square-dot">
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                    <i class="fa-solid fa-square"></i>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="offer">
        <div class="header">
            <h4>Buku Terbaru</h4>
            {{-- <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                exercitationem.
            </p> --}}
        </div>
        <div class="offer-container">
            @foreach ($newBooks as $itemBook)
                <div class="offer">
                    <div class="img">
                        <a href="{{route('home.detailBuku', $itemBook->id)}}"><img src="{{ asset('Image/Buku/' . $itemBook->gambar) }}"
                                alt="" /></a>
                    </div>
                    <div class="offer-content">
                        <h5>{{ $itemBook->judul }}</h5>
                        <div class="genre">
                            {{-- <span>biography</span>
                            <span>thriller</span> --}}
                            <span>{{ $itemBook->Kategori->kategori }}</span>
                        </div>
                        <p>
                            {{ $itemBook->sinopsis }}
                        </p>
                        <small>{{ $itemBook->pengarang }}</small>
                        <div class="offer-bottom">
                            @if ($itemBook->file_book)
                                <a href="#" class="cartbtn"><i class="fa-solid fa-book"></i>Reading</a>
                            @endif
                            {{-- <div class="price">
                                <strong><span>$</span>18.7</strong>
                            </div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- <section class="sale">
        <div class="header">
            <h4>Flash Sale</h4>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                Ipsum dignissimos quasi aliquid numquam.
            </p>
        </div>
        <div class="timer">
            <div class="hours">
                <span id="hour"></span>
                <small>Hours</small>
            </div>
            <div class="minutes">
                <span id="minute"></span>
                <small for="minute">Minutes</small>
            </div>
            <div class="seconds">
                <span id="second"></span>
                <small for="second">Seconds</small>
            </div>
        </div>
        <div class="book-container">
            <div class="book">
                <div class="img">
                    <a href="Pages/book-detail.html"><img src="{{asset('best-ebook-website/images/book-9.jpg')}}" alt="" />
                    </a>
                </div>
                <h5>The Ruins Of Gorlan</h5>
                <small>Thriller</small>
                <div class="price">
                    <span>$54.6</span>
                    <span><strike>$70.00</strike></span>
                </div>
            </div>
            <div class="book">
                <div class="img">
                    <a href="Pages/book-detail.html"><img src="images/book-10.jpg" alt="" /></a>
                </div>
                <h5>Percy Jackson</h5>
                <small>Thriller</small>
                <div class="price">
                    <span>$54.6</span>
                    <span><strike>$70.00</strike></span>
                </div>
            </div>
            <div class="book">
                <div class="img">
                    <a href="Pages/book-detail.html"><img src="images/book-11.jpg" alt="" /></a>
                </div>
                <h5>Clever Lands</h5>
                <small>Thriller</small>
                <div class="price">
                    <span>$54.6</span>
                    <span><strike>$70.00</strike></span>
                </div>
            </div>
            <div class="book">
                <div class="img">
                    <a href="Pages/book-detail.html"><img src="images/book-12.jpg" alt="" /></a>
                </div>
                <h5>Dick Francis</h5>
                <small>Thriller</small>
                <div class="price">
                    <span>$54.6</span>
                    <span><strike>$70.00</strike></span>
                </div>
            </div>
            <div class="book">
                <div class="img">
                    <a href="Pages/book-detail.html"><img src="images/book-1.jpg" alt="" />
                    </a>
                </div>
                <h5>The Giver</h5>
                <small>Thriller</small>
                <div class="price">
                    <span>$54.6</span>
                    <span><strike>$70.00</strike></span>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="book-sale">
        <div class="heading">
            <h4>Book Suggestions</h4>
            <div class="arrowbtn">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
        <div class="book-container">
            <div class="wrapper">
                <ul class="carousel">
                    @foreach ($books as $bookRandom )

                    <li class="card">
                        <div class="img">
                            <a href="{{route('home.detailBuku', $bookRandom->id)}}"><img src="{{ asset('Image/Buku/' . $bookRandom->gambar) }}"
                                    alt="" /></a>
                            <span class="badge">{{$bookRandom->Kategori->kategori}}</span>
                        </div>
                        <h5>{{$bookRandom->judul}}</h5>
                        <div class="genre">
                            <span>{{$bookRandom->Kategori->kategori}}</span>
                        </div>
                        <div class="footer">
                            {{-- <span class="star"><i class="fa fa-star"></i> 4.7</span> --}}
                            {{-- <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div> --}}
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    {{-- <section class="feature">
        <div class="main">
            <div class="content">
                <h4>Featured Books</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br />
                    Molestias, illum? Doloremque eius quis officiis rerum pariatur.
                </p>
                <div class="featured-book-card">
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-2.jpg" alt="" /></a>
                    </div>
                    <div class="card-description">
                        <div class="card-header">
                            <div class="icon">
                                <i class="fa-regular fa-bookmark"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="title">
                                <h5>The Wright Brothers</h5>
                                <small>biography, adventure</small>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6>Synopsis</h6>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Suscipit, aperiam magnam! Eius voluptas nihil repellendus quam
                                velit harum vel alias mollitia veritatis omnis. Ut vel, fugiat
                                obcaecati odio minus molestiae?
                            </p>
                            <div class="author-year">
                                <div class="author">
                                    <small>Written by</small>
                                    <strong>Kevin Smiley</strong>
                                </div>
                                <div class="year">
                                    <small>Year</small>
                                    <strong>2019</strong>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="price">
                                <span>$84.78</span>
                                <strike>$90.00</strike>
                            </div>
                            <div class="cartbtn">
                                <button><i class="fa-solid fa-cart-shopping"></i>Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-section">
                <div class="container">
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-2.jpg" alt="" /></a>
                    </div>
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-1.jpg" alt="" /></a>
                    </div>
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-3.jpg" alt="" /></a>
                    </div>
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-4.jpg" alt="" /></a>
                    </div>
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-5.jpg" alt="" /></a>
                    </div>
                    <div class="img">
                        <a href="pages/book-detail.html"><img src="images/book-6.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
    </section> --}}

    {{-- <section class="news">
        <div class="heading">
            <div class="title">
                <h4>Latest News</h4>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br />
                    Quia, laborum ad perspiciatis ab, sequi.
                </p>
            </div>
            <div class="btn">
                <button>View More <i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
        <div class="news-container">
            <div class="post">
                <div class="img">
                    <img src="images/news-1.avif" alt="" />
                </div>
                <h5>Why reading is important for our children?</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Aspernatur, quo temporibus! Tenetur...
                    <a href="">Continue reading</a>
                </p>
                <div class="post-footer">
                    <div class="img">
                        <img src="images/man1.png" alt="" />
                    </div>
                    <div class="details">
                        <strong>James Bond</strong>
                        <small>5 August 2020</small>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="img">
                    <img src="images/news-2.webp" alt="" />
                </div>
                <h5>Why reading is important for our children?</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Aspernatur, quo temporibus! Tenetur...
                    <a href="">Continue reading</a>
                </p>
                <div class="post-footer">
                    <div class="img">
                        <img src="images/man1.png" alt="" />
                    </div>
                    <div class="details">
                        <strong>James Bond</strong>
                        <small>5 August 2020</small>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="img">
                    <img src="images/news-3.jpg" alt="" />
                </div>
                <h5>Why reading is important for our children?</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Aspernatur, quo temporibus! Tenetur...
                    <a href="">Continue reading</a>
                </p>
                <div class="post-footer">
                    <div class="img">
                        <img src="images/man1.png" alt="" />
                    </div>
                    <div class="details">
                        <strong>James Bond</strong>
                        <small>5 August 2020</small>
                    </div>
                </div>
            </div>
            <div class="post">
                <div class="img">
                    <img src="images/news-4.jpg" alt="" />
                </div>
                <h5>Why reading is important for our children?</h5>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Aspernatur, quo temporibus! Tenetur...
                    <a href="">Continue reading</a>
                </p>
                <div class="post-footer">
                    <div class="img">
                        <img src="images/man1.png" alt="" />
                    </div>
                    <div class="details">
                        <strong>James Bond</strong>
                        <small>5 August 2020</small>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="countdown">
        <div class="container">
            <div class="customer counter">
                <div class="icon">
                    <i class="fa-solid fa-user-group"></i>
                </div>
                <div class="content">
                    <h4 class="count">{{$userCounts}}</h4>
                    <small>Users</small>
                </div>
            </div>
            <div class="book counter">
                <div class="icon">
                    <i class="fa-solid fa-book"></i>
                </div>
                <div class="content">
                    <h4 class="count">{{$bookCounts}}</h4>
                    <small>Book Collections</small>
                </div>
            </div>
            {{-- <div class="store counter">
                <div class="icon">
                    <i class="fa-solid fa-store"></i>
                </div>
                <div class="content">
                    <h4 class="count">1,562</h4>
                    <small>Our Stores</small>
                </div>
            </div>
            <div class="writer counter">
                <div class="icon">
                    <i class="fa-solid fa-feather"></i>
                </div>
                <div class="content">
                    <h4 class="count">457</h4>
                    <small>Famous Writer</small>
                </div>
            </div> --}}
        </div>
    </section>
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
