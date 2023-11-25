function selectionSort(arr) {
  const len = arr.length;
  if (arr.length === 0) return [];

  for (let i = 0; i < len; i++) {
    let mininum = i;

    for (let j = i + 1; j < len; j++) {
      if (arr[j] < arr[mininum]) {
        mininum = j;
      }
    }

    if (i != mininum) {
      [arr[i], arr[mininum]] = [arr[mininum], arr[i]];
    }
  }

  return arr;
}