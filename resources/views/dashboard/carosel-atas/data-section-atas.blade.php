<!-- Container for the HTML slideshow -->
<div style="width: 500px">
    <!-- Container for the HTML slideshow -->
    <div class="imageshow-container">
        <!-- Individual image slides -->
        <div class="imageClass fade">
            <img src="{{ asset('assets/img/newsletter-1.jpg') }}" style="width:100%">
            <!-- Caption for the first image -->
            <div style="text-align: center;">Image 1</div>
        </div>

        <div class="imageClass fade">
            <img src="{{ asset('assets/img/newsletter-1.jpg') }}" style="width:100%">
            <!-- Caption for the second image -->
            <div style="text-align: center;">Image 2</div>
        </div>

        <div class="imageClass fade">
            <img src="{{ asset('assets/img/newsletter-1.jpg') }}" style="width:100%">
            <!-- Caption for the third image -->
            <div style="text-align: center;">Image 3</div>
        </div>
    </div>
    <br>

    <!-- The dots/circles for navigation -->
    {{-- <div style="text-align:center">
        <span class="dot" onclick="currentImage(1)"></span>
        <span class="dot" onclick="currentImage(2)"></span>
        <span class="dot" onclick="currentImage(3)"></span>
    </div> --}}
</div>
<hr>
