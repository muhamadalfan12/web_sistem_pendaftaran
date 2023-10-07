<footer class="bg-dark text-inverse">
    <div class="container pt-13 pt-md-15 pb-7">
        <div class="row gy-6 gy-lg-0">
            <div class="col-lg-6">
                <div class="widget">
                    <h3 class="h2 mb-3 text-white">BLKK MULTIMEDIA CIREBON</h3>
                    <p class="lead mb-5">
                        Balai Latihan Kerja Komunitas Hidayatullah melakukan kegiatan Pelatihan Multimedia di kecamatan Harjamukti, Cirebon, Jawa Barat, Indonesia.
                    </p>
                    <a href="#" class="btn btn-white rounded-pill">Back to Top</a>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /column -->
            <div class="col-md-4 col-lg-4 offset-lg-2">
                <div class="widget">
                    <h4 class="widget-title text-white mb-3">Contact Us</h4>
                    <address id="address">Argasunya, Kec. Harjamukti, Kota Cirebon, Jawa Barat 45145
                    </address>
                    <a id="_email" href="mailto:sindangjawa@gmail.com">blkkcirebon@gmail.com</a><br />
                    <a id="_phone" href="tel:0898-5137-716">0898-5137-716</a>
                </div>
                <nav class="nav social social-white">
                    <a href=""><i class="uil uil-twitter"></i></a>
                    <a href=""><i class="uil uil-instagram"></i></a>
                    <a href=""><i class="uil uil-youtube"></i></a>
                </nav>
            </div>

        </div>
        <!--/.row -->
        <hr class="mt-13 mt-md-15 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">

            <p style="text-align: center" class="mb-2 mb-lg-0">&copy; 2023 BlkkCirebon. All rights reserved.</p>

            <!-- /.social -->
        </div>
        <!-- /div -->
    </div>
    <!-- /.container -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>
<script src="http://localhost/sistem_informasi_desa/resources/assets/js/landingjs/plugins.js"></script>
<script src="http://localhost/sistem_informasi_desa/resources/assets/js/landingjs/theme.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script>
    Fancybox.bind('[data-fancybox]', {});
</script>

<script>
    async function loadID(item) {
        item.forEach(result => {
            observer.observe(result);
        });
    }

    let options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.25
    };

    let callback = (entries, observer) => {
        entries.forEach(result => {
            if (result.isIntersecting && result.target.className.includes('lazyimage')) {
                let imageURL = result.target.getAttribute('data-lazyimg');
                if (imageURL) {
                    result.target.src = imageURL;
                    observer.unobserve(result.target);
                }
            }
        });
        // $('#filer-all').attr('class', 'filter-item'); 
        // $('#filer-all').attr('class', 'filter-item active');
    };

    let observer = new IntersectionObserver(callback, options);
    const getIndexex = document.querySelectorAll('.lazyimage');
    loadID(getIndexex);


    (function() {
        let YouTubeContainers = document.querySelectorAll(".embed-youtube");

        // Iterate over every YouTube container you may have
        for (let i = 0; i < YouTubeContainers.length; i++) {
            let container = YouTubeContainers[i];
            let splitedSource = container.dataset.videoId.split("?");
            let imageSource = "https://img.youtube.com/vi/" + splitedSource[0] + "/sddefault.jpg";

            // Load the Thumbnail Image asynchronously
            let image = new Image();
            image.src = imageSource;
            image.alt = splitedSource[1];
            image.addEventListener("load", function() {
                container.appendChild(image);
            });

            // When the user clicks on the container, load the embedded YouTube video
            container.addEventListener("click", function() {
                let iframe = document.createElement("iframe");

                iframe.setAttribute("frameborder", "0");
                iframe.setAttribute("allowfullscreen", "");
                iframe.setAttribute("allow",
                    "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                );
                // Important: add the autoplay GET parameter, otherwise the user would need to click over the YouTube video again to play it 
                iframe.setAttribute("src", "https://www.youtube.com/embed/" + this.dataset.videoId +
                    "?rel=0&showinfo=0&autoplay=1");
                iframe.setAttribute("alt", splitedSource[1]);

                // Clear Thumbnail and load the YouTube iframe
                this.innerHTML = "";
                this.appendChild(iframe);
            });
        }
    })();
</script>
