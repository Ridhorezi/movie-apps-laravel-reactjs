import React from 'react'
import Sidebar from '@/Layouts/Authenticated/Sidebar'
import Topbar from '@/Layouts/Authenticated/Topbar'

const Authenticated = ({ auth, children }) => {
  return (
    <>
      <div className="mx-auto max-w-screen hidden lg:block"></div>
      {/* START: Sidebar*/}
      <Sidebar />
      {/* END: Sidebar */}

      {/* Start: Content */}
      <div className="ml-[300px] px-[50px]">
        <div className="py-10 flex flex-col gap-[50px]">
          {/* Start: Top Bar */}
          <Topbar name={auth.user.name} />
          {/* End: Top Bar */}
          <main>{children}</main>
        </div>
      </div>
      {/* End: Content */}

      <div className="mx-auto px-4 w-full h-screen lg:hidden flex bg-black">
        <div className="text-white text-2xl text-center leading-snug font-medium my-auto"></div>
        Sorry, this page only supported on 1024px screen or above
      </div>
    </>
  )
}

export default Authenticated
