function flatten(originalArray) {
    if(originalArray.length < 1) return [];
    
    let newArr = [];

    for (let i = 0; i < originalArray.length; i++) {
        if(Array.isArray(originalArray[i])) {
            newArr = newArr.concat(flatten(originalArray[i]));
        } else {
            newArr.push(originalArray[i]);
        }
    }

    return newArr;
}