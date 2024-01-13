const binarySearch = (arr, target) => {
    let left = 0;
    let right = arr.length - 1;

    while (left <= right) {
        const mid = Math.floor((left + right) / 2);
        const guess = arr[mid];
        if (guess === target) {
            return mid;
        } else if (guess < target) {
            left = mid + 1;
        } else {
            right = mid - 1;
        }
    }

    return null;
}

const list = [1, 3, 5, 7, 9];

console.log(binarySearch(list, 3));
console.log(binarySearch(list, -1));
