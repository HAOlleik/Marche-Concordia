const parseToArray = (toEdit) => {
  const separatedItems = toEdit.split("\n")
  const [orderId, dateOrdered, customerName, total, fulfilled] =
    returnParsedArray(separatedItems)

  localStorage.setItem("orderId", `${orderId}`)
  localStorage.setItem("dateOrdered", `${dateOrdered}`)
  localStorage.setItem("customerName", `${customerName}`)
  localStorage.setItem("total", `${total}`)
  localStorage.setItem("fulfilled", `${fulfilled}`)

  window.location.href = "P12.html"
}

const returnParsedArray = (separatedItems) => {
  let orderId, dateOrdered, customerName, total, fulfilled
  for (let i = 1; i < 6; i++) {
    switch (i) {
      case 1:
        let [start, ...end] = separatedItems[i].split("#")
        orderId = end[0]
        break
      case 2:
        dateOrdered = separatedItems[i].trim()
        break
      case 3:
        customerName = separatedItems[i].trim()
        break
      case 4:
        let [begin, ...finish] = separatedItems[i].split("$")
        total = finish[0]
        break
      case 5:
        fulfilled = separatedItems[i].trim()
        break
    }
  }
  return [orderId, dateOrdered, customerName, total, fulfilled]
}

const recompute = (toDelIndex) => {
  const table = document.querySelector("#tg")
  table.deleteRow(toDelIndex)

  let elements = document.querySelectorAll(".prod")
  for (let i = 0; i < elements.length; i++) elements[i].id = "prod-" + i
}

const deleteRow = (t, index) => {
  t.getElementsByTagName("tr")[index].remove()
}

const renderPage = (orderId, dateOrdered, customerName, total, fulfilled) => {
  const maxDate = computeMaxDate()
  const valueDate = parseDate(dateOrdered)

  document.title = `${orderId} - Order Profile`
  document.getElementById("renderOrderNum").innerHTML = `Order #${orderId}`
  document.getElementById("cname").innerHTML = customerName

  document.getElementById("datefield").setAttribute("max", maxDate)
  document.getElementById("datefield").setAttribute("value", valueDate)

  document.getElementById("total").innerHTML = `\$${total}`

  const fulfilledElement = document
    .getElementById("fulfilled")
    .getElementsByTagName("option")

  switch (fulfilled) {
    case "\u2713":
      fulfilledElement[0].selected = "selected"
      break

    case "\u2296":
      fulfilledElement[1].selected = "selected"
      break

    case "\u2717":
      fulfilledElement[2].selected = "selected"
      break
  }
}
const parseDate = (dateOrdered) => {
  return dateOrdered.replaceAll("/", "-").split("-").reverse().join("-")
}

const computeMaxDate = () => {
  let max = new Date()
  let date = max.getDate()
  let month = max.getMonth() + 1
  let year = max.getFullYear()

  if (date < 10) {
    date = "0" + date
  }

  if (month < 10) {
    month = "0" + month
  }

  max = year + "-" + month + "-" + date
  return max
}

$(document).ready(function () {
  switch (document.location.href.match(/[^\/]+$/)[0]) {
    case "P11.html":
      $(".edit").click(function () {
        const toEdit = $(this).parent().parent().parent().text()
        parseToArray(toEdit)
      })
      break
    case "P12.html":
      renderPage(
        localStorage.getItem("orderId"),
        localStorage.getItem("dateOrdered"),
        localStorage.getItem("customerName"),
        localStorage.getItem("total"),
        localStorage.getItem("fulfilled")
      )

      $(".btn-danger").click(function () {
        const toDelId = $(this).parent().parent().parent().attr("id")

        const toDelIndex = parseInt(
          toDelId.substring(toDelId.indexOf("prod") + 4, toDelId.length)
        )

        recompute(toDelIndex)
      })

      function wcqib_refresh_quantity_increments() {
        jQuery(
          "div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)"
        ).each(function (a, b) {
          let c = jQuery(b)
          c.addClass("buttons_added"),
            c
              .children()
              .first()
              .before('<input type="button" value="-" class="minus" />'),
            c
              .children()
              .last()
              .after('<input type="button" value="+" class="plus" />')
        })
      }

      String.prototype.getDecimals ||
        (String.prototype.getDecimals = function () {
          let a = this,
            b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/)
          return b
            ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0))
            : 0
        }),
        jQuery(document).ready(function () {
          wcqib_refresh_quantity_increments()
        }),
        jQuery(document).on("updated_wc_div", function () {
          wcqib_refresh_quantity_increments()
        }),
        jQuery(document).on("click", ".plus, .minus", function () {
          let a = jQuery(this).closest(".quantity").find(".qty"),
            b = parseFloat(a.val()),
            c = parseFloat(a.attr("max")),
            d = parseFloat(a.attr("min")),
            e = a.attr("step")
          ;(b && "" !== b && "NaN" !== b) || (b = 0),
            ("" !== c && "NaN" !== c) || (c = ""),
            ("" !== d && "NaN" !== d) || (d = 0),
            ("any" !== e &&
              "" !== e &&
              void 0 !== e &&
              "NaN" !== parseFloat(e)) ||
              (e = 1),
            jQuery(this).is(".plus")
              ? c && b >= c
                ? a.val(c)
                : a.val((b + parseFloat(e)).toFixed(e.getDecimals()))
              : d && b <= d
              ? a.val(d)
              : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())),
            a.trigger("change")
        })

      break
  }
})
