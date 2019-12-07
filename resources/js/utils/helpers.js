export function search(key, myArray){
    for (var i = 0; i < myArray.length; i++) {
        if (myArray[i].product_id === key) {
            return {
                exist: true,
                index: i
            };
            break;
        }
    }
    return false;
}
