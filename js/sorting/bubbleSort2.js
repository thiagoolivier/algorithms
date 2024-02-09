function bubbleSort2(arr) {
  let swapped = true;
  
  do {
    swapped = false;
    for (let i = 0; i < arr.length; i++) {
      if (arr[i] > arr[i + 1]) {
        [arr[i], arr[i + 1]] = [arr[i + 1], arr[i]];
        swapped = true;
      }
    }
  } while (swapped);

  return arr;
}

const result = bubbleSort2([1, 123, 4, 15, 1, 4]);
console.log(result);