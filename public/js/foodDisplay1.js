function getHotelId() {
    alert('in getHotelId');

    var f=localstorage;
    return f.getItem('hotelId');
}