import Head from 'next/head'
import { pastMeetups } from '../config'
import PastMeetup from '../components/PastMeetup'

interface Talk {
  title: string;
  date: string;
  twitter: string;
  name: string;
}

export async function getStaticProps (context) {
  const res = await fetch(`https://sheet.best/api/sheets/5aaff40e-dcb2-4b53-a838-94c11474447c`)
  const talks: Talk[] = await res.json()
  // const talks = require('../talks.json')

  if (!talks) {
    return {
      notFound: true,
    }
  }

  return {
    props: {
      talks: talks.filter((talk) => talk.name)
    },
  }
}

interface EventsProps {
  talks: Talk[]
}

export default function Meetups (props: EventsProps) {
  return (
    <>
      <Head>
        <title>Vergangene Meetups | Laravel DACH</title>
      </Head>
      <main className="flex-auto w-full" role="main">
        <div className="rounded bg-white px-8 py-12">
          <h2 className="text-3xl mb-2">Vergangene Meetups</h2>
          <p className="text-xl text-gray-600 mb-6">
            Meetup verpasst? Keine Sorge. Die Aufnahmen von vergangenen Meetups stehen weiterhin auf YouTube bereit. Du
            kannst sie dir jederzeit ansehen.
          </p>
          {pastMeetups.map((meetup, index) => (
            <PastMeetup talks={props.talks} meetup={meetup}/>
          ))}
        </div>
      </main>
    </>
  )
}
