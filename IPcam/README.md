NOTE: This is a multi-part challenge, based off of a fake webcam software, written in PHP. The `files` directory contains a local customised version of the Soniqcam website, available [here](https://github.com/LinusKay/soniqcam). 

Alternatively, a working demo is available at 
Demo site: https://libus.xyz/websec/ipcam. 

# IPcam #1

Difficulty: Hard

## Challenge
My friend has been missing in action for some time. Suddenly, they sent me a message inviting me to come visit, and encouraged me to book a room in their apartment building. I want to track them down, but before they could tell me anything about the place they went offline again! The only other information they left was a link to a public webcam. 

What is the name of the building they’re staying in, and what time is check in?

Write the flag as `FLAG{building_name_00:00}`, eg: `FLAG{fancy_apartments_17:30}`


<details>
<summary>Solution</summary>

The IP camera is currently offline, however there is a screenshot inside the Gallery page. The building on the left in the distance has the text `KULTURNI CENTAR NOVI PAZAR` which can be used to track down the building. From there, its possible to use maps and reference the rooves to determine which building the camera is on. 

Searching for `novi plazar apartments` will return an image of the area with ‘KULA APARTMAN’ over the building

By looking up `kula apartments` you can find booking pages, which lists check-in time.

Flags: 
- `kula_apartments_13:00`
- `kula_apartman_13:00`
- `kula_apartments_1pm`
- `kula_apartman_1pm`
</details>

---


# IPcam #2

Difficulty: Easy

## Challenge

Hmm… The webcam has an administrator page. I wonder if there is a way I can get in and snoop around for any secrets. 

Demo site: https://libus.xyz/websec/ipcam

<details>
<summary>Solution</summary>

On the footer of the website is a link to the Soniqcam website, where there are links to two device manuals. The advanced manual is broken, however the simplified manual has default admin credentials inside it. These can be used to log in to the admin panel and grab the flag. 

`soniq:admin123`

Flags:
- `CH4NG3_Y0UR_P455W0RD`

</summary>