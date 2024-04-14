<style>
    .dropdown-menu {
    display: block; /* Ensure dropdown menu is displayed as a block */
    position: absolute; /* Position the dropdown menu */
    z-index: 1000; /* Ensure dropdown appears on top of other elements */
    background-color: #ffffff; /* Set background color */
    border: 1px solid #cccccc; /* Add a border */
    border-radius: 4px; /* Add border-radius for rounded corners */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a box shadow for depth */
    padding: 0.5rem 0; /* Add padding to dropdown items */
    transform: translateX(-25%);
}

.dropdown-item {
    display: block; /* Ensure dropdown items are displayed as block elements */
    padding: 0.5rem 1rem; /* Add padding to dropdown items */
    color: #333333; /* Set text color */
    text-decoration: none; /* Remove default underline */
}

.dropdown-item:hover {
    background-color: #f8f9fa; /* Change background color on hover */
}
.dropdown-menu {
    display: none; /* Hide dropdown menu by default */
    /* Add other styling properties as needed */
}
.dropdown-menu.show {
    display: block; /* Show dropdown menu when 'show' class is added */
}
</style>

<script>
// JavaScript to toggle dropdown menu visibility
document.addEventListener('DOMContentLoaded', function() {
    var dropdownToggle = document.getElementById('languageDropdown');
    var dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggle.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show'); // Toggle 'show' class on dropdown menu
    });

    // Close dropdown menu when a language is selected
    var dropdownItems = document.querySelectorAll('.dropdown-item');
    dropdownItems.forEach(function(item) {
        item.addEventListener('click', function() {
            dropdownMenu.classList.remove('show'); // Remove 'show' class to hide dropdown menu
        });
    });

    // Close dropdown menu if user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!dropdownToggle.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show'); // Remove 'show' class to hide dropdown menu
        }
    });
});

</script>

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown" aria-haspopup="true" aria-expanded="false">
        {{ Config::get('app.locale') }}
    </button>
    <div class="dropdown-menu" aria-labelledby="languageDropdown">
        @foreach (Config::get('app.supported_locales') as $locale => $name)
            <a class="dropdown-item" href="{{ route('locale', $locale) }}">{{ $name }}</a>
        @endforeach
    </div>
</div>
