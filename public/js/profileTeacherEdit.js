function previewImage(){
        const image = document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        imgPreview.style.borderRadius = '50%';
        imgPreview.style.maxHeight = '100%';
        imgPreview.style.overflow = 'hidden';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFRevent){
            imgPreview.src = oFRevent.target.result;
        }
    }

console.log('hi')

    function updateCities(provinceId) {
        // Fetch cities based on the selected province ID via AJAX
        // Replace the URL with the actual route or endpoint to fetch cities
        const url = `/cities/${provinceId}`;
        console.log('hei');

        // Make an AJAX request to fetch the cities
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Get the cities dropdown element
                const cityDropdown = document.getElementById('city');
                // Clear the previous options
                cityDropdown.innerHTML = '<option value="">Select City</option>';

                // Iterate over the cities and add them as options to the dropdown
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.innerText = city.name;
                    // Set the selected attribute if the city matches the user's existing value or the old input value
                    if (city.id === {{ old('city', $user->city) }}) {
                        option.setAttribute('selected', 'selected');
                    }
                    cityDropdown.appendChild(option);
                });
})
            .catch(error => {
                console.error('Error:', error);
            });
    }
