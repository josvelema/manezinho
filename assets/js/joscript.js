// made by Jos Velema 2022

//opening hours
(function (window) {
  "use strict"
  function define_openHours () {

    let OpenHours = {}
    let openClose = document.getElementById('openClosed');


    let insertColon = function (time) {
      let center = time.length - 2
      let timeWithColon = [time.slice(0, center), ":", time.slice(center)].join("")
      return timeWithColon
    }

    let formatTime = function (time) {
      if (time) {
        if (time >= 1200) {
          let formattedTime = time === 1200 ? 1200 : time - 1200
          return `${insertColon(formattedTime.toString())} PM`
        } else {
          return `${insertColon(time.toString())} AM`
        }
      }
    }

    const weekIndex = {
      0: "Sunday",
      1: "Monday",
      2: "Tuesday",
      3: "Wednesday",
      4: "Thursday",
      5: "Friday",
      6: "Saturday"
    }

    let determineDay = function (day, dayDiv) {
      let now = new Date()
      if (day === weekIndex[now.getDay()]) {
        dayDiv.style["font-weight"] = "bold"
        openClose.innerHTML = "We are open!"
      } else {
        openClose.innerHTML = "We are closed"
      }

    }

    OpenHours["generateTime"] = function (hours) {
      let rootElement = document.getElementById("open-hours")
      let table = document.createElement("table")
      if (rootElement) {
        for (let day in hours) {
          let dayDiv = document.createElement("tr")

          determineDay(day, dayDiv)

          let dayTitleElement = document.createElement("td")
          let dayTimesElement = document.createElement("td")

          let dayTitle = document.createTextNode(day)
          dayTitleElement.appendChild(dayTitle)
          dayDiv.appendChild(dayTitleElement)

          let dayHours = ""

          if (Object.keys(hours[day]).length === 0) {
            dayHours = `Closed`
          } else {
            dayHours = `${formatTime(hours[day]["start"])} - ${formatTime(hours[day]["end"])}`
          }

          let dayTimes = document.createTextNode(dayHours)
          dayTimesElement.appendChild(dayTimes)
          dayDiv.appendChild(dayTimesElement)
          table.appendChild(dayDiv)
        }
        rootElement.appendChild(table)
      }
    }

    return OpenHours
  }

  if (typeof OpenHours === "undefined") {
    window.OpenHours = define_openHours()
  }
}(window))

