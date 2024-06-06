const search = (e) => {
    if(e.key == 'Enter'){
        e.preventDefault();
        const form = document.getElementById('search-form');
        form.submit();
    }
}
