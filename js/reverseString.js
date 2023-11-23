function reverse(originalString) {
  let reversedString = "";

  function helper(input) {
    if (input.length === 0) return reversedString;
    reversedString += input[input.length - 1];
    helper(input.substring(0, input.length - 1));
  }

  helper(originalString);
  return reversedString;
}

reverse("aweasome");
