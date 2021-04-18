import Document, { Html, Head, Main, NextScript } from 'next/document'

class MyDocument extends Document {
  static async getInitialProps (ctx) {
    const initialProps = await Document.getInitialProps(ctx)
    return { ...initialProps }
  }

  render () {
    return (
      <Html lang="de">
        <Head>
          <link rel="icon" href="/favicon.ico"/>
          <link rel="preconnect" href="https://fonts.gstatic.com"/>
          <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;900&display=swap"
                rel="stylesheet"/>
          <script async defer data-domain="laravelphp.de" src="https://stats.laravelphp.de/js/index.js"/>
        </Head>
        <body className="bg-gray-100 text-gray-800 leading-normal font-sans">
        <div className="container max-w-4xl mx-auto">
          <header className="flex flex-col items-center py-12 px-6 text-center" role="banner">
            <a href="/" className="mb-6"><img className="h-12" src="/img/logo.svg" alt=""/></a>

            <h1 className="text-4xl text-gray-700 font-black my-0 whitespace-nowrap">
              Laravel DACH
            </h1>
            <div className="text-2xl text-gray-500 font-medium">Deutschsprachige Laravel Community</div>
          </header>
          <Main/>
          <NextScript/>
          <footer className="pb-12 pt-6 px-6 text-gray-500 text-sm leading-loose" role="contentinfo">
            <div
              className="flex flex-col md:flex-row items-center justify-center md:justify-between gap-4">
              <div className="text-center md:text-left">
                <span>Webseite wird betrieben von </span>
                <a href="https://www.rabe.pro/" className="text-gray-600" rel="author noopener">
                  Marvin Rabe
                </a>.<br/>
                <span>Fehlt etwas? </span>
                <a href="https://github.com/marvinrabe/laravelphp.de" className="text-gray-600" rel="noopener">
                  Erstelle ein Pull Request
                </a>.
              </div>

              <div className="text-center md:text-right">
                <span>Der Meetup Server wird gesponsert von </span><br/>
                <img src="/img/hetzner-logo.svg" alt="Hetzner Online GmbH" className="inline-block md:ml-auto h-4"/>
              </div>
            </div>
          </footer>
        </div>
        </body>
      </Html>
    )
  }
}

export default MyDocument
