
</div>


<!-- Scroll top bar -->
<button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"  stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>

<!-- All Script JS Plugins here  -->
<script src="{{ asset('fontend') }}/assets/js/vendor/popper.js" defer="defer"></script>
<script src="{{ asset('fontend') }}/assets/js/vendor/bootstrap.min.js" defer="defer"></script>
<script src="{{ asset('fontend') }}/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="{{ asset('fontend') }}/assets/js/plugins/isotope.pkgd.min.js"></script>

<!-- Customscript js -->
<script src="{{ asset('fontend') }}/assets/js/script.js"></script>

<!-- Dark to light js -->
<script>
// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.getItem("theme-color") === "dark" || (!("theme-color" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
  document.getElementById("light__to--dark")?.classList.add("dark--version");
}
if (localStorage.getItem("theme-color") === "light") {
  document.getElementById("light__to--dark")?.classList.remove("dark--version");
}
</script>

</body>

<!-- Mirrored from themihub.com/html/morex-bootstrap/morex/index-2-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Jun 2023 18:01:43 GMT -->
</html>
