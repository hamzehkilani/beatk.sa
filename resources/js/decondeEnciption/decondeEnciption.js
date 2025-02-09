function decodeEncryption(data) {
    try {
        // Step 1: Decode Base64
        const decodedString = atob(data);

        // Step 2: Parse JSON
        const parsedData = JSON.parse(decodedString);

        // Return the parsed object
        return parsedData;
    } catch (error) {
        console.error("Error decoding or parsing data:", error);
        return null; // Return null or handle error as appropriate
    }
}

export { decodeEncryption };




