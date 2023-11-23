function bubbleSort(sourceArr) {
  for (let i = sourceArr.length - 1; i >= 1; i--) {
    for (let j = 0; j < i; j++) {
      if (sourceArr[j] > sourceArr[j + 1]) {
        const temp = sourceArr[j];
        sourceArr[j] = sourceArr[j + 1];
        sourceArr[j + 1] = temp;
      }
    }
  }

  return sourceArr;
}
