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
        <Main/>
        <NextScript/>
        </body>
      </Html>
    )
  }
}

export default MyDocument
