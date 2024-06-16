@extends('template.homePage.app')

@section('content')
    <nav class="navbar-2">
        <div class="logo">
        </div>
        <div class="search-box">
            <form action="{{ route('home.bukuPage') }}" method="get">
                @csrf
                <div class="search-field">

                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Search over 30 million Book titles" />
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
            <li><a href="{{ route('home.bukuPage') }}" style="color: #6c5dd4">Books</a></li>
            <li><a href="#">{{ $book->judul }}</a></li>
        </ul>
    </div>

    <section class="book-overview">
        <div class="img">
            <img src="{{ asset('Image/Buku/' . $book->gambar) }}" alt="" />
        </div>
        <div class="book-content">
            <h4>{{ $book->judul }}</h4>
            {{-- <div class="meta">
                <div class="review">
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>4.0</span>
                    </div>
                    <div class="comment-like">
                        <small><img src="../images/comment.png" alt="" /> <span>256 Reviews</span></small>
                        <small><img src="../images/like.png" alt="" /> <span>456k Likes</span></small>
                    </div>
                </div>
                <div class="social-btn">
                    <a href=""><i class="fa-brands fa-facebook-f"></i>Facebook</a>
                    <a href=""><i class="fa-brands fa-twitter"></i>Twitter</a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                    <a href=""><i class="fa-regular fa-envelope"></i>Email</a>
                </div>
            </div> --}}
            <p>
                {{ $book->sinopsis }}
            </p>

            <div class="footer">
                <div class="author-detail">
                    <div class="author">
                        <small>Written by</small>
                        <strong>{{ $book->pengarang }}</strong>
                    </div>
                    <div class="publisher">
                        <small>ISBN</small>
                        <strong>{{ $book->isbn }}</strong>
                    </div>
                    <div class="year">
                        <small>Year</small>
                        <strong>{{ substr($book->tahun_terbit, 0, 4) }}</strong>
                    </div>
                </div>
                {{-- <div class="badge">
                    <span><i class="fa-solid fa-bolt-lightning"></i>free shipping</span>
                    <span><i class="fa-solid fa-shield"></i>in stocks</span>
                </div> --}}
            </div>
            {{-- <div class="book-price">
                <div class="price">
                    <strong>$15.63</strong>
                    <strike>$16.99</strike>
                    <span>2%</span>
                </div>
                <div class="input-group">
                    <div class="quantity">
                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                        <input type="text" step="1" min="1" value="1" name="quantity"
                            class="quantity-field" style="width: 4.5rem" />
                        <input type="button" value="+" class="button-plus" data-field="quantity" />
                    </div>
                    <button class="cartbtn"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</button>
                    <button class="like"><i class="fa-regular fa-heart"></i></button>
                </div>
            </div> --}}
        </div>
    </section>
    <section class="book-info">
        <div class="detail-customer">
            <div class="tabbtns">
                <button class="tablink" data-btn="detail">Details Book</button>
                <button class="tablink" data-btn="customer">Reading Book</button>
            </div>
            <div class="book-detail tabcontent" id="detail">
                <div class="detail-line">
                    <strong>Book Title</strong><span>{{ $book->judul }}</span>
                </div>
                <div class="detail-line">
                    <strong>Author</strong><span>{{ $book->pengarang }}</span>
                </div>
                <div class="detail-line">
                    <strong>ISBN</strong><span>{{ $book->isbn }}</span>
                </div>
                {{-- <div class="detail-line">
                    <strong>Edition Language</strong><span>English</span>
                </div> --}}
                <div class="detail-line">
                    <strong>Number of Pages</strong><span>{{ $book->jumlah_halaman }}</span>
                </div>
                <div class="detail-line">
                    <strong>Date Published</strong><span>{{ $book->tahun_terbit }}</span>
                </div>
                <div class="detail-line">
                    <strong>Stock</strong><span>{{ $book->jumlah_stok }}</span>
                </div>
                {{-- <div class="detail-line">
                    <strong>Publisher</strong><span>Webpress Inc.</span>
                </div> --}}
                <div class="detail-line tag-line">
                    <strong>Kategori</strong>
                    <div class="tags">
                        <span>{{ $book->Kategori->kategori }}</span>
                    </div>
                </div>
            </div>
            <div class="customer-review tabcontent" id="customer">
                <div style="margin-top: 42px">
                    {{-- <object data="{{ asset('File/Buku/' . $book->file_book) }}" type="application/pdf" width="100%"
                        height="600px">
                        <p>Browser Anda tidak mendukung penampilan PDF. Anda dapat <a
                                href="{{ asset('File/Buku/' . $book->file_book) }}">mengunduh file PDF</a> langsung.</p>
                    </object> --}}
                    {{-- @dd(asset('/laraview/#../File/Buku' . $book->file_book)) --}}
                    @if ($book->file_book)
                        {{-- <iframe src ="{{ asset('/laraview/#../File/Buku/' . $book->file_book) }}"></iframe> --}}
                        {{-- <iframe src="{{ asset('/laraview/#../File/Buku/' . $book->file_book) }}" frameborder="0" style="max-width: 100%; width: 100%;"></iframe> --}}
                        <iframe src="{{ asset('/laraview/#../File/Buku/' . $book->file_book) }}" frameborder="0" class="responsive-iframe"></iframe>
                    @endif
                    {{-- <iframe src ="{{ asset('/laraview/#../pdf/test.pdf') }}" width="1000px" height="600px"></iframe> --}}
                </div>

            </div>
        </div>
        <div class="related-book">
            <h4>Related Books</h4>
            <div class="book-container">
                @foreach ($relatedBook as $item)
                    <div class="book">
                        <div class="img">
                            <img src="{{ asset('Image/Buku/' . $item->gambar) }}" alt="">
                        </div>
                        <div class="content">
                            <h5>{{ $item->judul }}</h5>
                            <div class="badge">
                                <span>{{ $item->Kategori->kategori }}</span>
                            </div>
                            {{-- <div class="rating-review">
                                <span><i class="fa-solid fa-star"></i>4.7</span>
                                <span>244 Reviews</span>
                            </div> --}}
                            {{-- <div class="price">
                                <strong>$45.5</strong>
                                <strike>$98.4</strike>
                            </div> --}}
                            {{-- <div class="btn">
                                <button class="cartbtn"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
                            </div> --}}
                        </div>
                    </div>
                @endforeach

                {{-- <div class="morebtn">
                    <button class="view-more">View More</button>
                </div> --}}
            </div>
        </div>
    </section>

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
                    @foreach ($randomBooks as $item)
                        <li class="card">
                            <div class="img">
                                <a href="{{ route('home.detailBuku', $item->id) }}"><img
                                        src="{{ asset('Image/Buku/' . $item->gambar) }}" alt="" /></a>
                                <span class="badge">{{ $item->Kategori->kategori }}</span>
                            </div>
                            <h5>{{ $item->judul }}</h5>
                            <div class="genre">
                                <span>{{ $item->Kategori->kategori }}</span>
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

    <section class="subscription">
        <div class="container">
            {{-- <h4>Subscribe our newsletter for Latest <br> books updates</h4>
            <div class="input">
                <input type="text" placeholder="Type your email here">
                <button>subscribe</button>
            </div> --}}
        </div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
    </section>
@endsection

{{-- @section('script')
<script>
   document.addEventListener('DOMContentLoaded', function() {
        var viewer = new Viewer(document.getElementById('your-pdf-container'), {
            toolbar: {
                download: false // Menonaktifkan tombol download jika tersedia
            }
        });
    });
    </script>
@endsection --}}
