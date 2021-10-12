const dollar = "$"
let hiddenTaxes = true
$(document).ready(function () {
  updateSubtotal()
  $("#show-taxes").hide()
  $("#show-taxes-link").click(function () {
    $("#show-taxes").toggle()
    $("#show-taxes-link").html(
      $("#show-taxes-link").html() === "Hide Taxes"
        ? "Show Taxes"
        : "Hide Taxes"
    )
  })
  $(".radio-group .radio").click(function () {
    $(".radio").addClass("gray")
    $(this).removeClass("gray")
  })

  $(".plus-minus .plus").click(function () {
    let count = $(this).parent().prev().text()
    let prodId = $(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .parent()
      .prev()
      .parent()
      .parent()
      .attr("id")

    $(this)
      .parent()
      .prev()
      .html(Number(count) + 1)

    updatePrices(prodId, count, "add")
  })

  $(".plus-minus .minus").click(function () {
    let count = $(this).parent().prev().text()
    let prodId = $(this)
      .parent()
      .parent()
      .parent()
      .parent()
      .parent()
      .prev()
      .parent()
      .parent()
      .attr("id")

    $(this)
      .parent()
      .prev()
      .html(Number(count) - 1)

    updatePrices(prodId, count, "sub")

    if (count - 1 <= 0) {
      document.getElementById(prodId).remove()
    }
  })
})

function updatePrices(prodId, count, addorsub) {
  let priceId = prodId.concat("price")

  const prevPrice = parseFloat(
    document.getElementById(`${priceId}`).innerHTML.substring(1)
  )

  let newPrice = prevPrice

  if (addorsub === "add") {
    newPrice =
      Math.round(
        ((Number(count) + 1) * (prevPrice / Number(count)) + Number.EPSILON) *
          100
      ) / 100
  } else if (addorsub === "sub") {
    newPrice =
      Math.round(
        ((Number(count) - 1) * (prevPrice / Number(count)) + Number.EPSILON) *
          100
      ) / 100
  }

  document.getElementById(`${priceId}`).innerHTML = dollar.concat(newPrice)

  updateSubtotal()
}

function updateSubtotal() {
  let temp = 1
  let tempBool = true
  let tempProds = []
  let tempPrices = []

  while (tempBool) {
    let tempEl = document.getElementById("prod".concat(temp, "price"))
    if (tempEl) {
      tempProds.push(tempEl)
      tempPrices.push(parseFloat(tempEl.innerHTML.substring(1)))
      temp = temp + 1
    } else {
      tempBool = false
    }
  }

  let subtotal = 0
  for (const price of tempPrices) {
    subtotal = Math.round((subtotal + price + Number.EPSILON) * 100) / 100
  }

  document.getElementById("subtotal").innerHTML = dollar.concat(subtotal)
  updateShipping(subtotal)
}

function updateShipping(subtotal) {
  let shipping =
    subtotal * 0.1 > 2.99
      ? Math.round((subtotal * 0.1 + Number.EPSILON) * 100) / 100
      : 2.99
  document.getElementById("shipping").innerHTML = dollar.concat(shipping)

  updateTotal(subtotal, shipping)
}

function updateTotal(subtotal, shipping) {
  // GST (5%) & QST (9.975%)
  let total =
    Math.round(((subtotal + shipping) * 1.14975 + Number.EPSILON) * 100) / 100
  document.getElementById("total").innerHTML = dollar.concat(total)

  updateTaxes(subtotal, shipping)

  document.getElementById("check-amt").innerHTML = dollar.concat(total)
}

function updateTaxes(subtotal, shipping) {
  // GST (5%) & QST (9.975%)
  let gst =
    Math.round(((subtotal + shipping) * 0.05 + Number.EPSILON) * 100) / 100
  let qst =
    Math.round(((subtotal + shipping) * 0.09975 + Number.EPSILON) * 100) / 100

  document.getElementById("gst").innerHTML = dollar.concat(gst)
  document.getElementById("gst-label").innerHTML = "GST (5%)"

  document.getElementById("qst").innerHTML = dollar.concat(qst)
  document.getElementById("qst-label").innerHTML = "QST (9.975%)"
}
