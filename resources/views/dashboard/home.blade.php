@extends('layouts.app')
@push('after-css')
    <style>
        /* CSS Slider container */
        /* .im     */
        /* Defining the dot styles */
        /* .dot {
                                                    cursor: pointer;
                                                    height: 15px;
                                                    width: 15px;
                                                    margin: 0 2px;
                                                    background-color: #bbb;
                                                    border-radius: 50%;
                                                    display: inline-block;
                                                    transition: background-color 0.6s ease;
                                                } */

        /* Setting a different style for hovering and active */
        /* .active,
                                            .dot:hover {
                                                background-color: #717171;
                                            } */
    </style>
@endpush
@section('content')
    {{-- @include('dashboard.carosel-atas.data-section-atas') --}}
    <!-- Main artikel -->
    @include('dashboard.halaman-artikel.artikel-page')
    {{-- end artikel --}}
    <!-- Main eevent -->
    @include('dashboard.halaman-event.event-page')
    {{-- end event --}}
@endsection
@push('after-js')
    <script>
        // Function to display the images
        // function currentImage(n) {
        //     var i;
        //     // Get all elements with the class name "imageClass"
        //     var images = document.getElementsByClassName("imageClass");
        //     // Get all elements with the class name "dot" (navigation dots)
        //     var dots = document.getElementsByClassName("dot");
        //     for (i = 0; i < images.length; i++) {
        //         images[i].style.display = "none";
        //     }
        //     // Remove the "active" class from all navigation dots
        //     for (i = 0; i < dots.length; i++) {
        //         dots[i].className = dots[i].className.replace(" active", "");
        //     }
        //     // Display the image corresponding to the current index
        //     images[n - 1].style.display = "block";
        //     // Add the "active" class to the corresponding navigation dot
        //     dots[n - 1].className += " active";
        // }
    </script>
@endpush
