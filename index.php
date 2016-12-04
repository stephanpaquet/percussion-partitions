  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>Test partition</title>
      <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
      <style media="screen">
        .container {
          margin-top: 5em;
        }
        .score td {
          border: 1px solid #AAA;
          padding: .5em 1em;
          margin: 0;
        }

        .stroke {
          background-color: #F7F7F7;
        }

        .score .first {
          border-left: 4px solid #333;
        }

        .score td:last-of-type {
          border-right: 4px solid #333;
        }

        .score .pulse {
          border-left: 2px solid #999;
        }

        .score {
          border-top: 4px solid #333;
          border-bottom: 4px solid #333;
        }
      </style>
    </head>
    <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="score">
              <caption>Exercice 1</caption>
              <tr>
                <td class="first">1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
              </tr>
              <tr class="stroke">
                <td class="first">B</td>
                <td>B</td>
                <td>T</td>
                <td>T</td>
              </tr>
              <tr>
                <td class="first">g</td>
                <td>d</td>
                <td>g</td>
                <td>d</td>
              </tr>
            </table>
          </div>
          <div class="col-md-12">
            <table class="score">
              <caption>Exercice 2</caption>
              <tr>
                <td class="first">1</td>
                <td>.</td>
                <td>2</td>
                <td>.</td>
                <td>3</td>
                <td>.</td>
                <td>4</td>
                <td>.</td>
                <td class="first">1</td>
                <td>.</td>
                <td>2</td>
                <td>.</td>
                <td>3</td>
                <td>.</td>
                <td>4</td>
                <td>.</td>
              </tr>
              <tr class="stroke">
                <td class="first">B</td>
                <td> </td>
                <td>B</td>
                <td> </td>
                <td>T</td>
                <td> </td>
                <td>T</td>
                <td> </td>
                <td class="first">B</td>
                <td>B</td>
                <td>T</td>
                <td>T</td>
                <td>B</td>
                <td>B</td>
                <td>T</td>
                <td>T</td>
              </tr>
              <tr>
                <td class="first">g</td>
                <td> </td>
                <td>d</td>
                <td> </td>
                <td>g</td>
                <td> </td>
                <td>d</td>
                <td> </td>
                <td class="first">g</td>
                <td>d</td>
                <td>g</td>
                <td>d</td>
                <td>g</td>
                <td>d</td>
                <td>g</td>
                <td>d</td>

              </tr>
            </table>
          </div>

          <div class="col-md-12">
            <table class="score">
              <caption>Exercice 3</caption>
              <tr>
                <td class="first">1</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="pulse">2</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="pulse">3</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>
                <td class="pulse">4</td>
                <td>.</td>
                <td>.</td>
                <td>.</td>

              </tr>
              <tr class="stroke">
                <td class="first">B</td>
                <td> </td>
                <td>T</td>
                <td> </td>
                <td class="pulse">B</td>
                <td> </td>
                <td>T</td>
                <td>O</td>
                <td class="pulse">B</td>
                <td> </td>
                <td>T</td>
                <td>X</td>
                <td class="pulse">B</td>
                <td> </td>
                <td>T</td>
                <td>O</td>
              </tr>

              <tr class="stroke">
                <td class="first"> </td>
                <td> </td>
                <td> </td>
                <td>O</td>
                <td class="pulse"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td class="pulse"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td class="pulse"> </td>
                <td> </td>
                <td> </td>
                <td> </td>
              </tr>
              <tr>
                <td class="first">g</td>
                <td> </td>
                <td>g</td>
                <td>d</td>
                <td class="pulse">g</td>
                <td> </td>
                <td>g</td>
                <td>d</td>
                <td class="pulse">g</td>
                <td> </td>
                <td>g</td>
                <td>d</td>
                <td class="pulse">g</td>
                <td> </td>
                <td>g</td>
                <td>d</td>

              </tr>
            </table>
          </div>
        </div>
      </div>
    </body>
  </html>
