import Head from 'next/head'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { upcomingMeetup, socialLinks, meetupsGermany, meetupsAustria, meetupsSwitzerland } from '../config'
import MeetupSection from '../components/MeetupSection'

export default function Home () {
  return (
    <>
      <Head>
        <title>Laravel DACH - Deutschsprachige Laravel Community</title>
      </Head>
      <main className="flex-auto w-full" role="main">
        <div className="rounded bg-white px-8 py-12">
          <h2 className="text-4xl mb-6">Hallo, 👋</h2>
          <p className="text-xl">
            dies ist die{' '}<strong>deutschsprachige</strong>{' '}Community für
            alle{' '}<strong>Laravel</strong>
            {' '}Entwickler. Ganz egal ob Anfänger oder Experte, du bist herzlich willkommen. Wir
            veranstalten
            regelmäßige{' '}<strong>Online-Meetups</strong>. Sei dabei, teile dein Wissen und chatte mit
            anderen
            Laravel Entwicklern.
          </p>

          <div className="my-6 md:my-12">
            <div
              className="-mx-6 md:-mx-12 px-6 py-8 md:py-12 md:px-5 border text-sm md:rounded-xl text-blueGray-200 text-center bg-gradient-to-br from-blueGray-700 to-blueGray-800">

              <h3 className="text-blueGray-400 text-lg md:text-2xl mb-2">Nächstes Online-Meetup</h3>

              <p className="text-xl md:text-3xl font-bold mt-0">
                {new Intl.DateTimeFormat('de-DE', {
                  dateStyle: 'full',
                  timeStyle: 'short'
                }).format(upcomingMeetup.date)}
              </p>

              <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-2xl mb-8 mx-auto">
                {upcomingMeetup.talks.map((talk, index) => (
                  <div
                    className="@if ($loop->last) md:col-span-2 md:ml-25p @else md:col-span-1 @endif flex items-center text-left space-x-4 lg:space-x-6">
                    <img className="w-16 h-16 border-2 border-blueGray-400 rounded-full lg:w-20 lg:h-20"
                         src={talk.speaker.avatar}
                         alt={`Avatar von ${talk.speaker.firstName} ${talk.speaker.lastName}`}/>
                    <div className="font-medium text-lg leading-6 space-y-1">
                      <p className="text-blueGray-200 m-0">{talk.title}</p>
                      <p className="text-blueGray-400 m-0">{talk.speaker.firstName} {talk.speaker.lastName}</p>
                    </div>
                  </div>
                ))}
              </div>

              <div className="mx-auto max-w-xs space-y-2">
                <a href={upcomingMeetup.url} className="button">Auf YouTube ansehen</a>
              </div>
            </div>

            <div className="text-center my-6 text-sm">
              <span>Vergangenes Meetup verpasst? </span>
              <a href="/meetups" className="font-bold">
                Zum Archiv
              </a>
            </div>
          </div>

          <h2 className="text-3xl mt-6 mb-2">Social Media</h2>
          <p className="text-xl text-gray-600 mb-6">Unterhalte dich mit anderen Entwicklern online.</p>

          <div className="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            {socialLinks.map((platform, index) => (
              <a key={index} href={platform.url} rel="noopener"
                 className="p-4 rounded text-white hover:text-white hover:opacity-90 flex items-center "
                 style={{ background: platform.color }}>
                <FontAwesomeIcon icon={platform.icon} fixedWidth className="text-2xl"/>
                <span className="ml-2 font-bold leading-tight">
                    {platform.title}
                  </span>
              </a>
            ))}
          </div>

          <hr className="border-b border-gray-200 my-6 md:my-12 rounded-full"/>

          <h2 className="text-3xl mt-6 mb-2">Lokale Meetups</h2>
          <p className="text-xl text-gray-600 mb-6">Laravel Entwickler aus deiner Nähe kennenlernen.</p>

          <MeetupSection title="🇩🇪 Deutschland" meetups={meetupsGermany}/>
          <MeetupSection title="🇦🇹 Österreich" meetups={meetupsAustria}/>
          <MeetupSection title="🇨🇭 Schweiz" meetups={meetupsSwitzerland}/>
        </div>
      </main>
    </>
  )
}
